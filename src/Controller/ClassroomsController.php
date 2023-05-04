<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Classrooms Controller
 *
 * @property \App\Model\Table\ClassroomsTable $Classrooms
 * @method \App\Model\Entity\Classroom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClassroomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schools'],
        ];
        $classrooms = $this->paginate($this->Classrooms);

        $this->set(compact('classrooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => ['Schools', 'Assessments', 'Students'],
        ]);

        $this->set(compact('classroom'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $classroom = $this->Classrooms->newEmptyEntity();
        if ($this->request->is('post')) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->getData());
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $schools = $this->Classrooms->Schools->find('list', ['limit' => 200]);
        $assessments = $this->Classrooms->Assessments->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'schools', 'assessments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $classroom = $this->Classrooms->get($id, [
            'contain' => ['Assessments'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classroom = $this->Classrooms->patchEntity($classroom, $this->request->getData());
            if ($this->Classrooms->save($classroom)) {
                $this->Flash->success(__('The classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The classroom could not be saved. Please, try again.'));
        }
        $schools = $this->Classrooms->Schools->find('list', ['limit' => 200]);
        $assessments = $this->Classrooms->Assessments->find('list', ['limit' => 200]);
        $this->set(compact('classroom', 'schools', 'assessments'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Classroom id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $classroom = $this->Classrooms->get($id);
        if ($this->Classrooms->delete($classroom)) {
            $this->Flash->success(__('The classroom has been deleted.'));
        } else {
            $this->Flash->error(__('The classroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
