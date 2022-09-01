
<table border=1px > 
    <tr>
        <th>BOOK ID </th>
        <th>BOOK NAME</th>
        <th>BOOK TITLE</th>
        <th>BOOK AUTHOR</th>
        <th>BOOK PRICE</th>
    </tr>
 <?php foreach($data['posts']as $post):?>
 
 <tr>
    <td>  <?= $post->bId ?>  </td>
    <td>  <?= $post->bName ?> </td>
    <td>  <?= $post->bTitle ?> </td>
    <td>  <?= $post->bAuthor ?> </td>
    <td>  <?= $post->bPrice ?>  </td> 
</tr>
 <?php endforeach ?>
</table>