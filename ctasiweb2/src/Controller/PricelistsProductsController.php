<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PricelistsProducts Controller
 *
 * @property \App\Model\Table\PricelistsProductsTable $PricelistsProducts
 *
 * @method \App\Model\Entity\PricelistsProduct[] paginate($object = null, array $settings = [])
 */
class PricelistsProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pricelists', 'Products']
        ];
        $pricelistsProducts = $this->paginate($this->PricelistsProducts);

        $this->set(compact('pricelistsProducts'));
        $this->set('_serialize', ['pricelistsProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Pricelists Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pricelistsProduct = $this->PricelistsProducts->get($id, [
            'contain' => ['Pricelists', 'Products']
        ]);

        $this->set('pricelistsProduct', $pricelistsProduct);
        $this->set('_serialize', ['pricelistsProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pricelistsProduct = $this->PricelistsProducts->newEntity();
        if ($this->request->is('post')) {
            $pricelistsProduct = $this->PricelistsProducts->patchEntity($pricelistsProduct, $this->request->getData());
            if ($this->PricelistsProducts->save($pricelistsProduct)) {
                $this->Flash->success(__('The pricelists product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricelists product could not be saved. Please, try again.'));
        }
        $pricelists = $this->PricelistsProducts->Pricelists->find('list', ['limit' => 200]);
        $products = $this->PricelistsProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('pricelistsProduct', 'pricelists', 'products'));
        $this->set('_serialize', ['pricelistsProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pricelists Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pricelistsProduct = $this->PricelistsProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pricelistsProduct = $this->PricelistsProducts->patchEntity($pricelistsProduct, $this->request->getData());
            if ($this->PricelistsProducts->save($pricelistsProduct)) {
                $this->Flash->success(__('The pricelists product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricelists product could not be saved. Please, try again.'));
        }
        $pricelists = $this->PricelistsProducts->Pricelists->find('list', ['limit' => 200]);
        $products = $this->PricelistsProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('pricelistsProduct', 'pricelists', 'products'));
        $this->set('_serialize', ['pricelistsProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pricelists Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pricelistsProduct = $this->PricelistsProducts->get($id);
        if ($this->PricelistsProducts->delete($pricelistsProduct)) {
            $this->Flash->success(__('The pricelists product has been deleted.'));
        } else {
            $this->Flash->error(__('The pricelists product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
