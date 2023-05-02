<ul>
    <?
        foreach($faqs as $faq) {
            echo '<li>' . $faq['question'] . ' ' . $faq['answer'];
        }
    ?>
</ul>