<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AssesstementsItems Controller
 *
 * @property \App\Model\Table\AssesstementsItemsTable $AssesstementsItems
 * @method \App\Model\Entity\AssesstementsItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssesstementsItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Assessments'],
        ];
        $assesstementsItems = $this->paginate($this->AssesstementsItems);

        $this->set(compact('assesstementsItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Assesstements Item id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assesstementsItem = $this->AssesstementsItems->get($id, [
            'contain' => ['Items', 'Assessments'],
        ]);

        $this->set(compact('assesstementsItem'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assesstementsItem = $this->AssesstementsItems->newEmptyEntity();
        if ($this->request->is('post')) {
            $assesstementsItem = $this->AssesstementsItems->patchEntity($assesstementsItem, $this->request->getData());
            if ($this->AssesstementsItems->save($assesstementsItem)) {
                $this->Flash->success(__('The assesstements item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assesstements item could not be saved. Please, try again.'));
        }
        $items = $this->AssesstementsItems->Items->find('list', ['limit' => 200]);
        $assessments = $this->AssesstementsItems->Assessments->find('list', ['limit' => 200]);
        $this->set(compact('assesstementsItem', 'items', 'assessments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assesstements Item id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assesstementsItem = $this->AssesstementsItems->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assesstementsItem = $this->AssesstementsItems->patchEntity($assesstementsItem, $this->request->getData());
            if ($this->AssesstementsItems->save($assesstementsItem)) {
                $this->Flash->success(__('The assesstements item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assesstements item could not be saved. Please, try again.'));
        }
        $items = $this->AssesstementsItems->Items->find('list', ['limit' => 200]);
        $assessments = $this->AssesstementsItems->Assessments->find('list', ['limit' => 200]);
        $this->set(compact('assesstementsItem', 'items', 'assessments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assesstements Item id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assesstementsItem = $this->AssesstementsItems->get($id);
        if ($this->AssesstementsItems->delete($assesstementsItem)) {
            $this->Flash->success(__('The assesstements item has been deleted.'));
        } else {
            $this->Flash->error(__('The assesstements item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
