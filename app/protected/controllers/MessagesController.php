<?php
  
  class MessagesController extends CController{
    public function actionNew() {
        return $this->render("new");
    }
  }

?>