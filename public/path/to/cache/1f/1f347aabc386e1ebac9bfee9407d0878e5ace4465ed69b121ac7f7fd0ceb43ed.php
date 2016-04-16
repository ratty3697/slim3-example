<?php

/* posts.phtml */
class __TwigTemplate_5b84958b22e5026376d577601e5e7b42543086bfd61097399cc621d7ceb4bef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>Example Application</title>
    <link rel=\"stylesheet\" href=\"http://yui.yahooapis.com/pure/0.6.0/pure-min.css\">
</head>
<body>
<h1>All Post</h1>
<!--
<p><a href=\"/posts/new\">Add new post</a></p>

<?php
if(\$data['posts'] && is_array(\$data['posts'])):
?>
<table class=\"pure-table\">
    <tr>
        <th>Title</th>
        <th>Type</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

<?php
    \$odd = 1;
    foreach(\$data['posts'] as \$post): ?>

        <tr <?=\$odd ? \"class=\\\"pure-table-odd\\\"\" : \"\"; ?>>
        <td><?=\$post->getTitle() ?></td>
        <td><?=\$post->getType() ?></td>
        <td><?=\$post->getShortDescription() ?> ...</td>
        
    </tr>

<?php 
    \$odd = \$odd ? 0 : 1;
    endforeach; ?>
</table>
<?php else: ?>
<p>No current posts</p>

<?php endif; ?>
-->

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "posts.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>Example Application</title>*/
/*     <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">*/
/* </head>*/
/* <body>*/
/* <h1>All Post</h1>*/
/* <!--*/
/* <p><a href="/posts/new">Add new post</a></p>*/
/* */
/* <?php*/
/* if($data['posts'] && is_array($data['posts'])):*/
/* ?>*/
/* <table class="pure-table">*/
/*     <tr>*/
/*         <th>Title</th>*/
/*         <th>Type</th>*/
/*         <th>Description</th>*/
/*         <th>Actions</th>*/
/*     </tr>*/
/* */
/* <?php*/
/*     $odd = 1;*/
/*     foreach($data['posts'] as $post): ?>*/
/* */
/*         <tr <?=$odd ? "class=\"pure-table-odd\"" : ""; ?>>*/
/*         <td><?=$post->getTitle() ?></td>*/
/*         <td><?=$post->getType() ?></td>*/
/*         <td><?=$post->getShortDescription() ?> ...</td>*/
/*         */
/*     </tr>*/
/* */
/* <?php */
/*     $odd = $odd ? 0 : 1;*/
/*     endforeach; ?>*/
/* </table>*/
/* <?php else: ?>*/
/* <p>No current posts</p>*/
/* */
/* <?php endif; ?>*/
/* -->*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
