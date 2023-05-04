<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Assessments Controller
 *
 * @property \App\Model\Table\AssessmentsTable $Assessments
 * @method \App\Model\Entity\Assessment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssessmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AssessmentTemplates'],
        ];
        $assessments = $this->paginate($this->Assessments);

        $this->set(compact('assessments'));
    }

    /**
     * View method
     *
     * @param string|null $id Assessment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assessment = $this->Assessments->get($id, [
            'contain' => ['AssessmentTemplates', 'Classrooms', 'AssesstementsItems', 'ItemAnswers'],
        ]);

        $this->set(compact('assessment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assessment = $this->Assessments->newEmptyEntity();
        if ($this->request->is('post')) {
            $assessment = $this->Assessments->patchEntity($assessment, $this->request->getData());
            if ($this->Assessments->save($assessment)) {
                $this->Flash->success(__('The assessment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment could not be saved. Please, try again.'));
        }
        $assessmentTemplates = $this->Assessments->AssessmentTemplates->find('list', ['limit' => 200]);
        $classrooms = $this->Assessments->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('assessment', 'assessmentTemplates', 'classrooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assessment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assessment = $this->Assessments->get($id, [
            'contain' => ['Classrooms'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assessment = $this->Assessments->patchEntity($assessment, $this->request->getData());
            if ($this->Assessments->save($assessment)) {
                $this->Flash->success(__('The assessment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment could not be saved. Please, try again.'));
        }
        $assessmentTemplates = $this->Assessments->AssessmentTemplates->find('list', ['limit' => 200]);
        $classrooms = $this->Assessments->Classrooms->find('list', ['limit' => 200]);
        $this->set(compact('assessment', 'assessmentTemplates', 'classrooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assessment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assessment = $this->Assessments->get($id);
        if ($this->Assessments->delete($assessment)) {
            $this->Flash->success(__('The assessment has been deleted.'));
        } else {
            $this->Flash->error(__('The assessment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
