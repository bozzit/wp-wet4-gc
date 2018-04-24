<?php get_header(); ?>

<div class="container">
<div class="row">

<main role="main" property="mainContentOfPage" class="col-md-9 col-md-push-3">
    <!-- MainContentStart -->
	<?php if (have_posts()) : ?>

			<!-- Content title begins / Début du titre du contenu -->
			<h1 id="wb-cont"><?php _e("<!--:en-->Search Results<!--:--><!--:fr-->Résultats de la recherche<!--:-->"); ?></h1>
			<!-- Content Title ends / Fin du titre du contenu -->
			
<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<?php while (have_posts()) : the_post(); ?>
			<article id="article-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<pre><?php _e("<!--:en-->Date Issued: <!--:--><!--:fr-->Date de publication&nbsp;: <!--:-->"); ?><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('j F Y') ?></time></pre>
				<?php the_excerpt(__("<!--:en--><p>Read this article &raquo;</p><!--:--><!--:fr--><p>Lire cet article &raquo;</p><!--:-->")); ?>
				<p class="postmetadata"><?php the_tags(__("<!--:en-->Tags:<!--:--><!--:fr-->Étiquettes&#160;:<!--:-->"), ', ', '<br />'); ?> <?php _e("<!--:en-->In:<!--:--><!--:fr-->dans&nbsp;: <!--:-->"); ?> <?php the_category(', ') ?> | <?php edit_post_link(__("<!--:en-->Modifier<!--:--><!--:fr-->Modifier<!--:-->"), '', ' | '); ?>  <?php comments_popup_link(__("<!--:en-->No comments &raquo;<!--:--><!--:fr-->Aucuns commentaires &raquo;<!--:-->"), __("<!--:en-->1 comment &raquo;<!--:--><!--:fr-->1 commentaire &raquo;<!--:-->"), __("<!--:en-->% comments &raquo;<!--:--><!--:fr-->% commentaires &raquo;<!--:-->"), 'comments-link', __("<!--:en-->Comments are closed<!--:--><!--:fr-->Les commentaires sont fermés.<!--:-->")); ?></p>
			</article>	
			<?php endwhile; ?>
			
			<div class="page">
				<div class="left"><?php next_posts_link(__("<!--:en-->&laquo; Older Entries<!--:--><!--:fr-->&laquo; Entrées plus anciennes<!--:-->")) ?></div>
				<div class="right"><?php previous_posts_link(__("<!--:en-->Newer Entries &raquo;<!--:--><!--:fr-->Entrées plus récentes &raquo;<!--:-->")) ?></div>
			</div>   
	<?php else : ?>

			<!-- Content title begins / Début du titre du contenu -->
			<h1 id="wb-cont" class="center"><?php _e("<!--:en-->Not Found<!--:--><!--:fr-->Introuvable<!--:-->"); ?></h1>
			<!-- Content Title ends / Fin du titre du contenu -->

<!-- clf2-nsi2 theme begins / Début du thème clf2-nsi2 -->
			<p class="center"><?php _e("<!--:en-->Sorry, no posts matched your criteria.<!--:--><!--:fr-->Désolé, aucun article ne correspond à vos critères.<!--:-->"); ?></p>
	<?php endif; ?>
    <!-- Date Modified begins / Début de la date de modification -->
			<!-- Date Modified begins / Début de la date de modification -->
			<dl id="wb-dtmd" role="contentinfo" property="dateModified">
            <dt><?php _e("<!--:en-->Date modified: <!--:--><!--:fr-->Date de modification&#160;:<!--:-->"); ?></dt> 
                 <dd>
                   <time><?php the_time('Y-m-d') ?></time>
                 </dd>
            </dl>
<div class="row">
   <div class="col-sm-6 col-md-5 col-lg-4">
      <details class="brdr-0">
         <summary class="btn btn-default text-center">Report a problem on this page</summary>
         <div class="well row">
            <div class="gc-rprt-prblm">
               <div class="gc-rprt-prblm-frm gc-rprt-prblm-tggl" id="wb-auto-3">
                  <form action="#">
                     <fieldset>
                        <legend><span class="field-name">Please select all that apply: </span></legend>
                        <div class="checkbox">
                           <label for="problem1"><input data-reveal="#broken" name="problem" value="Something is broken" id="problem1" type="checkbox">Something is broken</label>
                        </div>
                        <div class="form-group hide" id="broken">
                           <label for="problem1-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem1-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem2"><input data-reveal="#spelling" name="problem" value="It has spelling or grammar mistakes" id="problem2" type="checkbox">The page has spelling or grammar mistakes</label>
                        </div>
                        <div class="form-group hide" id="spelling">
                           <label for="problem2-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem2-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem3"><input data-reveal="#wrong" name="problem" value="The information is wrong" id="problem3" type="checkbox">The information is wrong</label>
                        </div>
                        <div class="form-group hide" id="wrong">
                           <label for="problem3-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem3-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem4"><input data-reveal="#outdated" name="problem" value="The information is outdated" id="problem4" type="checkbox">The information is outdated</label>
                        </div>
                        <div class="form-group hide" id="outdated">
                           <label for="problem4-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem4-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem5"><input data-reveal="#find" name="problem" value="I can’t find what I’m looking for" id="problem5" type="checkbox">I can’t find what I’m looking for</label>
                        </div>
                        <div class="form-group hide" id="find">
                           <label for="problem5-detail">Describe what you’re looking for (optional):</label>
                           <input class="form-control full-width" id="problem5-detail" type="text">
                        </div>
                        <div class="checkbox">
                           <label for="problem6"><input data-reveal="#confusing" name="problem" value="It’s confusing" id="problem6" type="checkbox">Other</label>
                        </div>
                        <div class="form-group hide" id="confusing">
                           <label for="problem6-detail">Provide more details (optional):</label>
                           <input class="form-control full-width" id="problem6-detail" type="text">
                        </div>
                     </fieldset>
                     <button type="submit" class="btn btn-primary wb-toggle wb-init wb-toggle-inited" data-toggle="{&quot;stateOff&quot;: &quot;hide&quot;, &quot;stateOn&quot;: &quot;show&quot;, &quot;selector&quot;: &quot;.gc-rprt-prblm-tggl&quot;}" aria-controls="wb-auto-3 wb-auto-4">Submit</button>
                  </form>
               </div>
               <div class="gc-rprt-prblm-thnk gc-rprt-prblm-tggl hide" id="wb-auto-4">
                  <h3>Thank you for your help!</h3>
                  <p>You will not receive a reply. For enquiries, please <a href="https://www.canada.ca/en/contact.html">contact us</a>.</p>
               </div>
            </div>
         </div>
      </details>
   </div>
</div>

		</main>
		<!-- Main content ends / Fin du contenu principal --> 

<?php get_sidebar(); ?>
</div></div>
<?php get_footer(); ?>
