<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transports Controller
 *
 * @property \App\Model\Table\TransportsTable $Transports
 *
 * @method \App\Model\Entity\Transport[] paginate($object = null, array $settings = [])
 */
class TransportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Stores']
        ];
        $transports = $this->paginate($this->Transports);

        $this->set(compact('transports'));
        $this->set('_serialize', ['transports']);
    }

    /**
     * View method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transport = $this->Transports->get($id, [
            'contain' => ['Stores', 'Posts', 'Sales']
        ]);

        $this->set('transport', $transport);
        $this->set('_serialize', ['transport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transport = $this->Transports->newEntity();
        if ($this->request->is('post')) {
            $transport = $this->Transports->patchEntity($transport, $this->request->getData());
            if ($this->Transports->save($transport)) {
                $this->Flash->success(__('The transport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transport could not be saved. Please, try again.'));
        }
        $stores = $this->Transports->Stores->find('list', ['limit' => 200]);
        $posts = $this->Transports->Posts->find('list', ['limit' => 200]);
        $this->set(compact('transport', 'stores', 'posts'));
        $this->set('_serialize', ['transport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transport = $this->Transports->get($id, [
            'contain' => ['Posts']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transport = $this->Transports->patchEntity($transport, $this->request->getData());
            if ($this->Transports->save($transport)) {
                $this->Flash->success(__('The transport has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transport could not be saved. Please, try again.'));
        }
        $stores = $this->Transports->Stores->find('list', ['limit' => 200]);
        $posts = $this->Transports->Posts->find('list', ['limit' => 200]);
        $this->set(compact('transport', 'stores', 'posts'));
        $this->set('_serialize', ['transport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transport id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transport = $this->Transports->get($id);
        if ($this->Transports->delete($transport)) {
            $this->Flash->success(__('The transport has been deleted.'));
        } else {
            $this->Flash->error(__('The transport could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
