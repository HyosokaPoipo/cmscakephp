<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArticleTags Controller
 *
 * @property \App\Model\Table\ArticleTagsTable $ArticleTags
 *
 * @method \App\Model\Entity\ArticleTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticleTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Tags']
        ];
        $articleTags = $this->paginate($this->ArticleTags);

        $this->set(compact('articleTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articleTag = $this->ArticleTags->get($id, [
            'contain' => ['Articles', 'Tags']
        ]);

        $this->set('articleTag', $articleTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articleTag = $this->ArticleTags->newEntity();
        if ($this->request->is('post')) {
            $articleTag = $this->ArticleTags->patchEntity($articleTag, $this->request->getData());
            if ($this->ArticleTags->save($articleTag)) {
                $this->Flash->success(__('The article tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article tag could not be saved. Please, try again.'));
        }
        $articles = $this->ArticleTags->Articles->find('list', ['limit' => 200]);
        $tags = $this->ArticleTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('articleTag', 'articles', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articleTag = $this->ArticleTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articleTag = $this->ArticleTags->patchEntity($articleTag, $this->request->getData());
            if ($this->ArticleTags->save($articleTag)) {
                $this->Flash->success(__('The article tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article tag could not be saved. Please, try again.'));
        }
        $articles = $this->ArticleTags->Articles->find('list', ['limit' => 200]);
        $tags = $this->ArticleTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('articleTag', 'articles', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articleTag = $this->ArticleTags->get($id);
        if ($this->ArticleTags->delete($articleTag)) {
            $this->Flash->success(__('The article tag has been deleted.'));
        } else {
            $this->Flash->error(__('The article tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
