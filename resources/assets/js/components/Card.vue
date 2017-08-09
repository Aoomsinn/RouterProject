<template>
    <div class="card-group">
        <div class="card" v-for="card in cards">
            <img class="card-img-top" :src="card.url">
            <div class="card-block">
                <h4 class="card-title">
                    {{ card.title }}
                </h4>
                <p class="card-text">
                    {{ card.name }}
                </p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                cards: [
                { url: 'https://image.freepik.com/free-vector/summer-background-with-delicious-melted-strawberry-ice-cream_23-2147627395.jpg',
                title: 'Hello Summer Enjoy',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/hand-drawn-ice-cream-set_23-2147633215.jpg',
                title: 'Ice Cream Collection',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/retro-ice-cream_23-2147494315.jpg',
                title: 'Hello Summer Enjoy',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/background-of-chocolate-ice-cream-with-wafer_23-2147638404.jpg',
                title: 'Ice Cream BG',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/ice-cream-background-with-nice-phrase_23-2147634710.jpg',
                title: 'Completes Me',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/nice-ice-cream-character-background_23-2147622813.jpg',
                title: 'Hello Summer',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/background-with-summer-elements-and-geometric-shapes_23-2147634855.jpg',
                title: 'Summer Sale',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/watercolor-cup-of-ice-cream_23-2147641793.jpg',
                title: 'Enjoy The Summer',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/realistic-ice-cream_1067-116.jpg',
                title: 'Ice Cream',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/retro-background-of-delicious-ice-creams_23-2147637832.jpg',
                title: 'Yummy',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/four-ice-creams_1114-225.jpg',
                title: 'Hello Ice Cream',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/watercolor-snowflakes-in-colorful-style_23-2147525357.jpg',
                title: 'Snow Flakes',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/ice-cream-poster-design_23-2147639176.jpg',
                title: 'Daily Fresh',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/ice-cream-cards-in-flat-design_23-2147633947.jpg',
                title: 'Buy Now',
                name: 'By Aoomsinn' },
                { url: 'https://image.freepik.com/free-vector/background-of-cute-ice-cream-with-phrase_23-2147635654.jpg',
                title: 'Good idea',
                name: 'By Aoomsinn' },
                ]
            }
        }
    }
</script>
<style lang="scss">
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        border-radius: 5px;
        width: 20rem;
        margin-bottom: 20px;
        float: none;
        margin: 20px;
        display: inline-block;

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
    @media (max-width: 511px) {
        .card {
            width: 35rem;
        }
    }
</style>
