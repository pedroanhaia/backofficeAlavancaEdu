<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AssessmentsClassrooms Controller
 *
 * @property \App\Model\Table\AssessmentsClassroomsTable $AssessmentsClassrooms
 * @method \App\Model\Entity\AssessmentsClassroom[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssessmentsClassroomsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assessments', 'Classrooms'],
        ];
        $assessmentsClassrooms = $this->paginate($this->AssessmentsClassrooms);

        $this->set(compact('assessmentsClassrooms'));
    }

    /**
     * View method
     *
     * @param string|null $id Assessments Classroom id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assessmentsClassroom = $this->AssessmentsClassrooms->get($id, [
            'contain' => ['Assessments', 'Classrooms'],
        ]);

        $this->set(compact('assessmentsClassroom'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assessmentsClassroom = $this->AssessmentsClassrooms->newEmptyEntity();
        if ($this->request->is('post')) {
            $assessmentsClassroom = $this->AssessmentsClassrooms->patchEntity($assessmentsClassroom, $this->request->getData());
            if ($this->AssessmentsClassrooms->save($assessmentsClassroom)) {
                $this->Flash->success(__('The assessments classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessments classroom could not be saved. Please, try again.'));
        }
        $assessments = $this->AssessmentsClassrooms->Assessments->find('list', ['limit' => 200]);
        $classrooms = $this->AssessmentsClassrooms->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('assessmentsClassroom', 'assessments', 'classrooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assessments Classroom id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assessmentsClassroom = $this->AssessmentsClassrooms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assessmentsClassroom = $this->AssessmentsClassrooms->patchEntity($assessmentsClassroom, $this->request->getData());
            if ($this->AssessmentsClassrooms->save($assessmentsClassroom)) {
                $this->Flash->success(__('The assessments classroom has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessments classroom could not be saved. Please, try again.'));
        }
        $assessments = $this->AssessmentsClassrooms->Assessments->find('list', ['limit' => 200]);
        $classrooms = $this->AssessmentsClassrooms->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('assessmentsClassroom', 'assessments', 'classrooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assessments Classroom id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assessmentsClassroom = $this->AssessmentsClassrooms->get($id);
        if ($this->AssessmentsClassrooms->delete($assessmentsClassroom)) {
            $this->Flash->success(__('The assessments classroom has been deleted.'));
        } else {
            $this->Flash->error(__('The assessments classroom could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
