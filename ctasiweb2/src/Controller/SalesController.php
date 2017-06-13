<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sales Controller
 *
 * @property \App\Model\Table\SalesTable $Sales
 *
 * @method \App\Model\Entity\Sale[] paginate($object = null, array $settings = [])
 */
class SalesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Addresses', 'Phones', 'Transports', 'SaleUsers', 'AprovalUsers']
        ];
        $sales = $this->paginate($this->Sales);

        $this->set(compact('sales'));
        $this->set('_serialize', ['sales']);
    }

    /**
     * View method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => ['Customers', 'Addresses', 'Phones', 'Transports', 'SaleUsers', 'AprovalUsers', 'Saleitems']
        ]);

        $this->set('sale', $sale);
        $this->set('_serialize', ['sale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sale = $this->Sales->newEntity();
        if ($this->request->is('post')) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $customers = $this->Sales->Customers->find('list', ['limit' => 200]);
        $addresses = $this->Sales->Addresses->find('list', ['limit' => 200]);
        $phones = $this->Sales->Phones->find('list', ['limit' => 200]);
        $transports = $this->Sales->Transports->find('list', ['limit' => 200]);
        $saleUsers = $this->Sales->SaleUsers->find('list', ['limit' => 200]);
        $aprovalUsers = $this->Sales->AprovalUsers->find('list', ['limit' => 200]);
        $this->set(compact('sale', 'customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
        $this->set('_serialize', ['sale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sale = $this->Sales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sale = $this->Sales->patchEntity($sale, $this->request->getData());
            if ($this->Sales->save($sale)) {
                $this->Flash->success(__('The sale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sale could not be saved. Please, try again.'));
        }
        $customers = $this->Sales->Customers->find('list', ['limit' => 200]);
        $addresses = $this->Sales->Addresses->find('list', ['limit' => 200]);
        $phones = $this->Sales->Phones->find('list', ['limit' => 200]);
        $transports = $this->Sales->Transports->find('list', ['limit' => 200]);
        $saleUsers = $this->Sales->SaleUsers->find('list', ['limit' => 200]);
        $aprovalUsers = $this->Sales->AprovalUsers->find('list', ['limit' => 200]);
        $this->set(compact('sale', 'customers', 'addresses', 'phones', 'transports', 'saleUsers', 'aprovalUsers'));
        $this->set('_serialize', ['sale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sale = $this->Sales->get($id);
        if ($this->Sales->delete($sale)) {
            $this->Flash->success(__('The sale has been deleted.'));
        } else {
            $this->Flash->error(__('The sale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
