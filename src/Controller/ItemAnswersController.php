<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ItemAnswers Controller
 *
 * @property \App\Model\Table\ItemAnswersTable $ItemAnswers
 * @method \App\Model\Entity\ItemAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemAnswersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Assessments', 'Items'],
        ];
        $itemAnswers = $this->paginate($this->ItemAnswers);

        $this->set(compact('itemAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Item Answer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemAnswer = $this->ItemAnswers->get($id, [
            'contain' => ['Students', 'Assessments', 'Items'],
        ]);

        $this->set(compact('itemAnswer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemAnswer = $this->ItemAnswers->newEmptyEntity();
        if ($this->request->is('post')) {
            $itemAnswer = $this->ItemAnswers->patchEntity($itemAnswer, $this->request->getData());
            if ($this->ItemAnswers->save($itemAnswer)) {
                $this->Flash->success(__('The item answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item answer could not be saved. Please, try again.'));
        }
        $students = $this->ItemAnswers->Students->find('list', ['limit' => 200]);
        $assessments = $this->ItemAnswers->Assessments->find('list', ['limit' => 200]);
        $items = $this->ItemAnswers->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemAnswer', 'students', 'assessments', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item Answer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemAnswer = $this->ItemAnswers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemAnswer = $this->ItemAnswers->patchEntity($itemAnswer, $this->request->getData());
            if ($this->ItemAnswers->save($itemAnswer)) {
                $this->Flash->success(__('The item answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item answer could not be saved. Please, try again.'));
        }
        $students = $this->ItemAnswers->Students->find('list', ['limit' => 200]);
        $assessments = $this->ItemAnswers->Assessments->find('list', ['limit' => 200]);
        $items = $this->ItemAnswers->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemAnswer', 'students', 'assessments', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item Answer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemAnswer = $this->ItemAnswers->get($id);
        if ($this->ItemAnswers->delete($itemAnswer)) {
            $this->Flash->success(__('The item answer has been deleted.'));
        } else {
            $this->Flash->error(__('The item answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
