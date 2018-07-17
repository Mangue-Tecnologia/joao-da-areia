<?php
class Blog extends AppModel {
    
    public $name = "Blog";
    public $useTable = "blog_posts";
    public $primaryKey = "id";
    public $displayField = "id";
    
}