<div class="row">
    <div class="col-lg-4">   
        <?php foreach ($comments as $comment): ?>

            <div class="comment" id="c<?php echo $comment->id; ?>">
                <div class="post panel panel-default">
                    <div class="panel-heading">  
                        <?php
                        echo CHtml::link("#{$comment->id}", $comment->getUrl($post), array(
                            'class' => 'cid',
                            'title' => 'Permalink to this comment',
                        ));
                        ?>
                        <div class="author">
                            <?php echo $comment->authorLink; ?> says:
                        </div>

                        <div class="time">
                            <?php echo date('F j, Y \a\t h:i a', $comment->create_time); ?>
                        </div>
                    </div>
                    <div class="content panel-body">
                        <?php echo nl2br(CHtml::encode($comment->content)); ?>
                    </div>

                </div><!-- comment -->
            </div>
        <?php endforeach; ?>
    </div>
</div>