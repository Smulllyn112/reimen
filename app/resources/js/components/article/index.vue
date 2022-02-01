<template>


      <div >
            <div class="carousel-item-c" v-for="latest_article in latest_articles" style="display:inline;">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <a :href="latest_article.route_url">
                    <img :src="latest_article.image_lazy" :data-src="latest_article.image_index" :alt="latest_article.title" class="img-b img-fluid lazy">
                  </a>
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a :href="latest_article.route_url" class="category-b">{{latest_article.title}}</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a :href="latest_article.route_url" v-html="latest_article.limit_characters"></a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <a :href="latest_article.route_url" class="date-b">{{latest_article.creation_date}}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      </div>


</template>

<script>
    export default {
        props:['latest_articles'],

    }
</script>



