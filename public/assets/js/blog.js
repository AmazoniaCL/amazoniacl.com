$('#form_comentar').submit(function () {
    $.ajax({
        url: '/blog/comentar',
        type: 'post',
        data: $('#form_comentar').serialize(),
        success: function (data) {
            $('#nuevo_comentario').html(`
                <li class="comment-item">

                    <div class="comments-content">
                        <div class="post__author author vcard">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="javascript:;">${ $('#nombre').val() }</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                    ${ $('#fecha').val() }
                                    </time>
                                </div>
                            </div>

                        </div>

                        <p>${ $('#contenido').val() }</p>
                    </div>

                </li>
            `);

            $('#form_comentar')[0].reset();
        }
    });

    return false;
});
