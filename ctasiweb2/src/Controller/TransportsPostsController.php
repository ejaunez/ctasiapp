<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransportsPosts Controller
 *
 * @property \App\Model\Table\TransportsPostsTable $TransportsPosts
 *
 * @method \App\Model\Entity\TransportsPost[] paginate($object = null, array $settings = [])
 */
class TransportsPostsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Transports', 'Posts']
        ];
        $transportsPosts = $this->paginate($this->TransportsPosts);

        $this->set(compact('transportsPosts'));
        $this->set('_serialize', ['transportsPosts']);
    }

    /**
     * View method
     *
     * @param string|null $id Transports Post id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transportsPost = $this->TransportsPosts->get($id, [
            'contain' => ['Transports', 'Posts']
        ]);

        $this->set('transportsPost', $transportsPost);
        $this->set('_serialize', ['transportsPost']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transportsPost = $this->TransportsPosts->newEntity();
        if ($this->request->is('post')) {
            $transportsPost = $this->TransportsPosts->patchEntity($transportsPost, $this->request->getData());
            if ($this->TransportsPosts->save($transportsPost)) {
                $this->Flash->success(__('The transports post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transports post could not be saved. Please, try again.'));
        }
        $transports = $this->TransportsPosts->Transports->find('list', ['limit' => 200]);
        $posts = $this->TransportsPosts->Posts->find('list', ['limit' => 200]);
        $this->set(compact('transportsPost', 'transports', 'posts'));
        $this->set('_serialize', ['transportsPost']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transports Post id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transportsPost = $this->TransportsPosts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transportsPost = $this->TransportsPosts->patchEntity($transportsPost, $this->request->getData());
            if ($this->TransportsPosts->save($transportsPost)) {
                $this->Flash->success(__('The transports post has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transports post could not be saved. Please, try again.'));
        }
        $transports = $this->TransportsPosts->Transports->find('list', ['limit' => 200]);
        $posts = $this->TransportsPosts->Posts->find('list', ['limit' => 200]);
        $this->set(compact('transportsPost', 'transports', 'posts'));
        $this->set('_serialize', ['transportsPost']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transports Post id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transportsPost = $this->TransportsPosts->get($id);
        if ($this->TransportsPosts->delete($transportsPost)) {
            $this->Flash->success(__('The transports post has been deleted.'));
        } else {
            $this->Flash->error(__('The transports post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
