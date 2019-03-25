<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jobs Controller
 *
 * @property \App\Model\Table\JobsTable $Jobs
 *
 * @method \App\Model\Entity\Job[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Customers', 'JobServices'=>['Services']]
        ];
        $jobs = $this->paginate($this->Jobs->find()->where(['Jobs.user_id' => $this->request->getSession()->read('Auth.User.id')]));
        //debug($jobs);
        $this->set(compact('jobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => ['Users', 'Customers', 'JobServices']
        ]);

        $this->set('job', $job);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $loguser = $this->request->getSession()->read('Auth.User');
        $job = $this->Jobs->newEntity();
        if ($this->request->is('post')) {
            $jobdata = $this->request->getData();

            foreach ($jobdata['job_services'] as $key => $value) {
                $service = $this->Jobs->JobServices->Services->find()->where(['id'=>$value['service_id']])->first();
                $discamount = $service->price * $value['qty'] * ($value['discount'] / 100 );
                $amount = $service->price * $value['qty'] - $discamount;
                $jobdata['job_services'][$key]['price'] = $service->price;
                $jobdata['job_services'][$key]['amount'] = $amount;
            }
            $job = $this->Jobs->patchEntity($job, $jobdata, ['associated'=>'JobServices']);

            //debug($job->toArray());
            //exit();

            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $totamt = $this->Jobs->find()->where(['user_id'=>$loguser['id'], 'DATE(trandate) = CURDATE()'])->contain(['JobServices']);
        $totday = 0;
        foreach ($totamt as $rec) {
            # code...
            foreach ($rec->job_services as $value) {
                # code...
                $totday += $value->amount;
            }
        }
        $totamt = $this->Jobs->find()->where(['user_id'=>$loguser['id'], 'MONTH(trandate) = MONTH(CURRENT_DATE())'])->contain(['JobServices']);
        $totmonth = 0;
        foreach ($totamt as $rec) {
            # code...
            foreach ($rec->job_services as $value) {
                # code...
                $totmonth += $value->amount;
            }
        }

        $totamt = $this->Jobs->find()->where(['user_id'=>$loguser['id'], 'YEAR(trandate) = YEAR(CURRENT_DATE())'])->contain(['JobServices']);
        $totyear = 0;
        foreach ($totamt as $rec) {
            # code...
            foreach ($rec->job_services as $value) {
                # code...
                $totyear += $value->amount;
            }
        }



        //debug($totamt->toArray()); 
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $customers = $this->Jobs->Customers->find('list', ['limit' => 200]);
        $services = $this->Jobs->JobServices->Services->find('list', ['limit' => 200]);
        $this->set(compact('job', 'users', 'customers', 'services', 'loguser', 'totday', 'totmonth', 'totyear'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $users = $this->Jobs->Users->find('list', ['limit' => 200]);
        $customers = $this->Jobs->Customers->find('list', ['limit' => 200]);
        $this->set(compact('job', 'users', 'customers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
