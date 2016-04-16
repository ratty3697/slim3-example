<?php

/* tickets.phtml */
class __TwigTemplate_9698d71d3c335a283e64336687fa1a79794f2b807c29ed5444c6646562a132be extends Twig_Template
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
<h1>All Tickets</h1>
<!--
<p><a href=\"/ticket/new\">Add new ticket</a></p>

<?php
if(\$data['tickets'] && is_array(\$data['tickets'])):
?>
<table class=\"pure-table\">
    <tr>
        <th>Title</th>
        <th>Component</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

<?php
    \$odd = 1;
    foreach(\$data['tickets'] as \$ticket): ?>

        <tr <?=\$odd ? \"class=\\\"pure-table-odd\\\"\" : \"\"; ?>>
        <td><?=\$ticket->getTitle() ?></td>
        <td><?=\$ticket->getComponent() ?></td>
        <td><?=\$ticket->getShortDescription() ?> ...</td>
        <td>
            <a href=\"<?=\$router->pathFor('ticket-detail', ['id' => \$ticket->getId()])?>\">view</a>
        </td>
    </tr>

<?php 
    \$odd = \$odd ? 0 : 1;
    endforeach; ?>
</table>
<?php else: ?>
<p>No current tickets</p>

<?php endif; ?>

-->

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "tickets.phtml";
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
/* <h1>All Tickets</h1>*/
/* <!--*/
/* <p><a href="/ticket/new">Add new ticket</a></p>*/
/* */
/* <?php*/
/* if($data['tickets'] && is_array($data['tickets'])):*/
/* ?>*/
/* <table class="pure-table">*/
/*     <tr>*/
/*         <th>Title</th>*/
/*         <th>Component</th>*/
/*         <th>Description</th>*/
/*         <th>Actions</th>*/
/*     </tr>*/
/* */
/* <?php*/
/*     $odd = 1;*/
/*     foreach($data['tickets'] as $ticket): ?>*/
/* */
/*         <tr <?=$odd ? "class=\"pure-table-odd\"" : ""; ?>>*/
/*         <td><?=$ticket->getTitle() ?></td>*/
/*         <td><?=$ticket->getComponent() ?></td>*/
/*         <td><?=$ticket->getShortDescription() ?> ...</td>*/
/*         <td>*/
/*             <a href="<?=$router->pathFor('ticket-detail', ['id' => $ticket->getId()])?>">view</a>*/
/*         </td>*/
/*     </tr>*/
/* */
/* <?php */
/*     $odd = $odd ? 0 : 1;*/
/*     endforeach; ?>*/
/* </table>*/
/* <?php else: ?>*/
/* <p>No current tickets</p>*/
/* */
/* <?php endif; ?>*/
/* */
/* -->*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
