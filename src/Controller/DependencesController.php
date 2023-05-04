<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dependences Controller
 *
 * @property \App\Model\Table\DependencesTable $Dependences
 * @method \App\Model\Entity\Dependence[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DependencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dependences = $this->paginate($this->Dependences);

        $this->set(compact('dependences'));
    }

    /**
     * View method
     *
     * @param string|null $id Dependence id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dependence = $this->Dependences->get($id, [
            'contain' => ['Departments'],
        ]);

        $this->set(compact('dependence'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dependence = $this->Dependences->newEmptyEntity();
        if ($this->request->is('post')) {
            $dependence = $this->Dependences->patchEntity($dependence, $this->request->getData());
            if ($this->Dependences->save($dependence)) {
                $this->Flash->success(__('The dependence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependence could not be saved. Please, try again.'));
        }
        $this->set(compact('dependence'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dependence id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dependence = $this->Dependences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dependence = $this->Dependences->patchEntity($dependence, $this->request->getData());
            if ($this->Dependences->save($dependence)) {
                $this->Flash->success(__('The dependence has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dependence could not be saved. Please, try again.'));
        }
        $this->set(compact('dependence'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dependence id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dependence = $this->Dependences->get($id);
        if ($this->Dependences->delete($dependence)) {
            $this->Flash->success(__('The dependence has been deleted.'));
        } else {
            $this->Flash->error(__('The dependence could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
