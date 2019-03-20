<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RolesActions Controller
 *
 * @property \App\Model\Table\RolesActionsTable $RolesActions
 *
 * @method \App\Model\Entity\RolesAction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolesActionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Actions']
        ];
        $rolesActions = $this->paginate($this->RolesActions);

        $this->set(compact('rolesActions'));
    }

    /**
     * View method
     *
     * @param string|null $id Roles Action id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rolesAction = $this->RolesActions->get($id, [
            'contain' => ['Roles', 'Actions']
        ]);

        $this->set('rolesAction', $rolesAction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rolesAction = $this->RolesActions->newEntity();
        if ($this->request->is('post')) {
            $rolesAction = $this->RolesActions->patchEntity($rolesAction, $this->request->getData());
            if ($this->RolesActions->save($rolesAction)) {
                $this->Flash->success(__('The roles action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles action could not be saved. Please, try again.'));
        }
        $roles = $this->RolesActions->Roles->find('list', ['limit' => 200]);
        $actions = $this->RolesActions->Actions->find('list', ['limit' => 200]);
        $this->set(compact('rolesAction', 'roles', 'actions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Roles Action id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rolesAction = $this->RolesActions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rolesAction = $this->RolesActions->patchEntity($rolesAction, $this->request->getData());
            if ($this->RolesActions->save($rolesAction)) {
                $this->Flash->success(__('The roles action has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roles action could not be saved. Please, try again.'));
        }
        $roles = $this->RolesActions->Roles->find('list', ['limit' => 200]);
        $actions = $this->RolesActions->Actions->find('list', ['limit' => 200]);
        $this->set(compact('rolesAction', 'roles', 'actions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Roles Action id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rolesAction = $this->RolesActions->get($id);
        if ($this->RolesActions->delete($rolesAction)) {
            $this->Flash->success(__('The roles action has been deleted.'));
        } else {
            $this->Flash->error(__('The roles action could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
