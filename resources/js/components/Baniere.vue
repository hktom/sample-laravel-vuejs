<template>
    <div id="baniere" class="w100 y15 relative ofhidden ms-y10 ss-y10">
        <!-- background image  -->
        <div
            id="bg-image"
            class="w100"
            :style="'height:110%;background-image: url(' + baniere + ')'"
        ></div>
        <!-- background image  -->

        <!-- text baniere -->
        <div id="bg-text" class="absolute mt0 fitme py-5">
            <div class="w80 mauto vls-w75 ms-w100 ss-w100">

                <!-- button back -->
                <div
                    v-if="btnback"
                    class="btn-back back-link cursor-pointer mx-3 mt5"
                    @click="_goBack"
                >
                    <font-awesome-icon icon="arrow-circle-left" />
                    {{ btnbackText }}
                </div>

                <!-- show text -->
                <div
                    v-else
                    class="px-3 mt3 text-header ms-fs1 ss-fs1 lms-fs1-3 d-md-block"
                    v-html="description"
                ></div>
            </div>
        </div>
        <!-- text baniere -->
    </div>
</template>

<script>
export default {
    props: [
        "description",
        "baniere",
        "btnback",
        "btnbackProject",
        "action_id",
        "btnBackAction",
        "btnbackText"
    ],
    methods: {
        _goBack() {
            return this.$router.go(-1);
        }
    }
};
</script>

<style>
#bg-image {
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-filter: blur(6px);
    filter: blur(6px);
    transform: scale(1.1);
}
.text-header {
    /* color: white;
    text-shadow: 0 0 1em black;
    font-weight: normal; */
    /* font-weight: normal; */
    color: #fff /*#eee*/;
    text-shadow: 0 0 0.2em #000;
    font-size: 1.6rem;
}

.back-link {
    color: white;
    text-decoration: none;
}

.back-link:hover {
    text-decoration: none;
    color: white;
}

.btn-back {
    background-color: rgb(23, 162, 184);
    border: none !important;
    font-size: 0.9em;
    color: white !important;
    font-weight: bold !important;
    padding: 10px 20px !important;
    border-radius: 300px !important;
    display: inline-block !important;
    /* position: absolute; */
    /* top: 10em;
    left: 13em; */
}

.btn-back:hover {
    background-color: rgb(7, 54, 61);
}
</style>
