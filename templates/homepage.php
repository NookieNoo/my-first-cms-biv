
<?php include "templates/include/header.php" ?>
    <ul id="headlines">
    <?php foreach ($results['articles'] as $article) { ?>
        <li class='<?php echo $article->id?>'>
            <h2>
                <span class="pubDate">
                    <?php echo date('j F', $article->publicationDate)?>
                </span>
                
                <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
                    <?php echo htmlspecialchars( $article->title )?>
                </a>
                
                <?php if (isset($article->categoryId)) { ?>
                    <span class="category">
                        in 
                        <a href=".?action=archive&amp;categoryId=<?php echo $article->categoryId?>">
                            <?php echo htmlspecialchars($results['categories'][$article->categoryId]->name )?>
                        </a>
                    </span>
                <?php } 
                else { ?>
                    <span class="category">
                        <?php echo "Без категории"?>
                    </span>
                <?php } ?>
                
                <?php if (isset($article->subCategory_id)) { ?>
                
                <span class="category">
                     in 
                    <a href=".?action=archiveSubCategories&amp;subCategory_id=<?php echo $article->subCategory_id?>">
                        <?php echo htmlspecialchars($results['subCategories'][$article->subCategory_id]->name )?>
                    </a>
                </span>
                
                <?php } ?>
                
            </h2>
            <p class="summary" id="<?php echo $article->id?>"><?php echo htmlspecialchars($article->newSummary)?></p>
            <img id="loader-identity" src="JS/ajax-loader.gif" alt="gif">
            
            <ul class="ajax-load">
                <li><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="ajaxArticleBodyByPost" data-contentId="<?php echo $article->id?>">Показать продолжение (POST)</a></li>
                <li><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="ajaxArticleBodyByGet" data-contentId="<?php echo $article->id?>">Показать продолжение (GET)</a></li>
                <li><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="newAjaxArticleBodyByPost" data-contentId="<?php echo $article->id?>">(POST) -- NEW</a></li>
                <li><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="newAjaxArticleBodyByGet" data-contentId="<?php echo $article->id?>">(GET)  -- NEW</a></li>
            </ul>
            <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>" class="showContent" data-contentId="<?php echo $article->id?>">Показать полностью</a>
        </li>
    <?php } ?>
    </ul>
    <p><a href="./?action=archive">Article Archive</a></p>
<?php include "templates/include/footer.php" ?>

    
