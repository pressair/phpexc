<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 2017/4/28
 * Time: 8:00
 */
header("Content-type: text/html; charset=utf-8");
echo $giveMe ="OK!";

$expression ="true"
?>
<p>This is going to be ignored by PHP and displayed by the browser.</p>
<?php echo 'While this is going to be parsed.'; ?>
<p>This will also be ignored by PHP and displayed by the browser.</p>


<?php if ($expression == true): ?>
    This will show if the expression is true.
<?php else: ?>
    Otherwise this will show.
<?php endif; ?>

<p>
<?php echo 'if you want to serve XHTML or XML documents, do it like this'; ?>
<p>
<script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions';
</script>
<p>
    <? echo 'this is the simplest, an SGML processing instruction'; ?>
    <?= $expression ?> This is a shortcut for
    <? echo $expression?>   //不是表达式，所以不显示
<p>
    <% echo 'You may optionally use ASP-style tags'; %>
    <%= $variable; # This is a shortcut for "<% echo . . ." %>

<?php
echo 'Ok' ?>

<?php
echo 'Ok'
?>

<?php
echo 'Ok'

?>
