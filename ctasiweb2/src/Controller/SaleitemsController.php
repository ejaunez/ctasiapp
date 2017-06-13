<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Saleitems Controller
 *
 * @property \App\Model\Table\SaleitemsTable $Saleitems
 *
 * @method \App\Model\Entity\Saleitem[] paginate($object = null, array $settings = [])
 */
class SaleitemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sales', 'Products']
        ];
        $saleitems = $this->paginate($this->Saleitems);

        $this->set(compact('saleitems'));
        $this->set('_serialize', ['saleitems']);
    }

    /**
     * View method
     *
     * @param string|null $id Saleitem id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $saleitem = $this->Saleitems->get($id, [
            'contain' => ['Sales', 'Products']
        ]);

        $this->set('saleitem', $saleitem);
        $this->set('_serialize', ['saleitem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $saleitem = $this->Saleitems->newEntity();
        if ($this->request->is('post')) {
            $saleitem = $this->Saleitems->patchEntity($saleitem, $this->request->getData());
            if ($this->Saleitems->save($saleitem)) {
                $this->Flash->success(__('The saleitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saleitem could not be saved. Please, try again.'));
        }
        $sales = $this->Saleitems->Sales->find('list', ['limit' => 200]);
        $products = $this->Saleitems->Products->find('list', ['limit' => 200]);
        $this->set(compact('saleitem', 'sales', 'products'));
        $this->set('_serialize', ['saleitem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Saleitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $saleitem = $this->Saleitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $saleitem = $this->Saleitems->patchEntity($saleitem, $this->request->getData());
            if ($this->Saleitems->save($saleitem)) {
                $this->Flash->success(__('The saleitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The saleitem could not be saved. Please, try again.'));
        }
        $sales = $this->Saleitems->Sales->find('list', ['limit' => 200]);
        $products = $this->Saleitems->Products->find('list', ['limit' => 200]);
        $this->set(compact('saleitem', 'sales', 'products'));
        $this->set('_serialize', ['saleitem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Saleitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $saleitem = $this->Saleitems->get($id);
        if ($this->Saleitems->delete($saleitem)) {
            $this->Flash->success(__('The saleitem has been deleted.'));
        } else {
            $this->Flash->error(__('The saleitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
