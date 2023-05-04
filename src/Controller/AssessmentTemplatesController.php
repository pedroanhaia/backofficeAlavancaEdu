<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AssessmentTemplates Controller
 *
 * @property \App\Model\Table\AssessmentTemplatesTable $AssessmentTemplates
 * @method \App\Model\Entity\AssessmentTemplate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssessmentTemplatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $assessmentTemplates = $this->paginate($this->AssessmentTemplates);

        $this->set(compact('assessmentTemplates'));
    }

    /**
     * View method
     *
     * @param string|null $id Assessment Template id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assessmentTemplate = $this->AssessmentTemplates->get($id, [
            'contain' => ['Assessments'],
        ]);

        $this->set(compact('assessmentTemplate'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assessmentTemplate = $this->AssessmentTemplates->newEmptyEntity();
        if ($this->request->is('post')) {
            $assessmentTemplate = $this->AssessmentTemplates->patchEntity($assessmentTemplate, $this->request->getData());
            if ($this->AssessmentTemplates->save($assessmentTemplate)) {
                $this->Flash->success(__('The assessment template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment template could not be saved. Please, try again.'));
        }
        $this->set(compact('assessmentTemplate'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assessment Template id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assessmentTemplate = $this->AssessmentTemplates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assessmentTemplate = $this->AssessmentTemplates->patchEntity($assessmentTemplate, $this->request->getData());
            if ($this->AssessmentTemplates->save($assessmentTemplate)) {
                $this->Flash->success(__('The assessment template has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assessment template could not be saved. Please, try again.'));
        }
        $this->set(compact('assessmentTemplate'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assessment Template id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assessmentTemplate = $this->AssessmentTemplates->get($id);
        if ($this->AssessmentTemplates->delete($assessmentTemplate)) {
            $this->Flash->success(__('The assessment template has been deleted.'));
        } else {
            $this->Flash->error(__('The assessment template could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
