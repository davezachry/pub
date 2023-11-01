<!-- SIMPLE EXAMPLE MODULE -->
<ul>
    <?
        foreach($faqs as $faq) {
            echo '<li><strong>' . $faq['question'] . '</strong> ' . $faq['answer'] . '</li>';
        }
    ?>
</ul>
