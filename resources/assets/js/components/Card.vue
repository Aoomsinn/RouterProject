<template>
    <div class="card-group">
        <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="https://image.freepik.com/free-vector/summer-background-with-delicious-melted-strawberry-ice-cream_23-2147627395.jpg" alt="Hello Summer">
              <div class="card-block">
                <h4 class="card-title">Hello Summer Enjoy</h4>
                <p class="card-text">By Aoomsinn</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="https://image.freepik.com/free-vector/hand-drawn-ice-cream-set_23-2147633215.jpg" alt="Ice Cream Collection">
              <div class="card-block">
                <h4 class="card-title">Ice Cream Collection</h4>
                <p class="card-text">By Aoomsinn</p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="https://image.freepik.com/free-vector/retro-ice-cream_23-2147494315.jpg" alt="Ice Cream">
              <div class="card-block">
                <h4 class="card-title">Ice Cream</h4>
                <p class="card-text">By Aoomsinn</p>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    }
</script>
<style lang="scss">
.card-group{
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        border-radius: 5px;
        width: 20rem;
        margin-bottom: 20px;
        float: none;
        margin: 10px auto;

        img {
            border-radius: 5px 5px 0 0;
            width: 100%;
        }
    }

    .card-block{
        padding: 10px;
    }
    .container {
        padding: 2px 16px;
    }
}
</style>
