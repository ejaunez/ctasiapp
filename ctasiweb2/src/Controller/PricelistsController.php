<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pricelists Controller
 *
 * @property \App\Model\Table\PricelistsTable $Pricelists
 *
 * @method \App\Model\Entity\Pricelist[] paginate($object = null, array $settings = [])
 */
class PricelistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Countries']
        ];
        $pricelists = $this->paginate($this->Pricelists);

        $this->set(compact('pricelists'));
        $this->set('_serialize', ['pricelists']);
    }

    /**
     * View method
     *
     * @param string|null $id Pricelist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pricelist = $this->Pricelists->get($id, [
            'contain' => ['Countries', 'Products']
        ]);

        $this->set('pricelist', $pricelist);
        $this->set('_serialize', ['pricelist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pricelist = $this->Pricelists->newEntity();
        if ($this->request->is('post')) {
            $pricelist = $this->Pricelists->patchEntity($pricelist, $this->request->getData());
            if ($this->Pricelists->save($pricelist)) {
                $this->Flash->success(__('The pricelist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricelist could not be saved. Please, try again.'));
        }
        $countries = $this->Pricelists->Countries->find('list', ['limit' => 200]);
        $products = $this->Pricelists->Products->find('list', ['limit' => 200]);
        $this->set(compact('pricelist', 'countries', 'products'));
        $this->set('_serialize', ['pricelist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pricelist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pricelist = $this->Pricelists->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pricelist = $this->Pricelists->patchEntity($pricelist, $this->request->getData());
            if ($this->Pricelists->save($pricelist)) {
                $this->Flash->success(__('The pricelist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pricelist could not be saved. Please, try again.'));
        }
        $countries = $this->Pricelists->Countries->find('list', ['limit' => 200]);
        $products = $this->Pricelists->Products->find('list', ['limit' => 200]);
        $this->set(compact('pricelist', 'countries', 'products'));
        $this->set('_serialize', ['pricelist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pricelist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pricelist = $this->Pricelists->get($id);
        if ($this->Pricelists->delete($pricelist)) {
            $this->Flash->success(__('The pricelist has been deleted.'));
        } else {
            $this->Flash->error(__('The pricelist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
