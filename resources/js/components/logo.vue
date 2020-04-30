<template>
    <div class="wauto">
        <div class="d-flex flex-row bd-highlight align-items-top">
            <!-- color logo -->
            <div v-if="color == 'black'">
                <img
                    style="width:30px;vertical-align: inherit"
                    class="mr-2"
                    src="/img/plan_biodiversite_logo.png"
                />
            </div>

            <!-- white logo -->
            <div v-else>
                <img
                    style="width:50px"
                    class="mr-2"
                    src="/img/logo_white.png"
                />
            </div>

            <span
            v-if="color == 'black'"
                :class="color + ' mx-0 px-0  fs0-4 bold inline-block ss-fs0-2 title'"
                style=""
            >

            PLAN BIODIVERSITÉ 2020-2023 <br />
                DE LA STRATÉGIE BIODIVERSITÉ <br />
                GENÈVE 2030

            </span>

            <h6
                v-else
                :class="color + ' mx-0 px-0  bold'"
                style="line-height: 1rem;"
            >
                PLAN BIODIVERSITÉ 2020-2023 <br />
                DE LA STRATÉGIE BIODIVERSITÉ <br />
                GENÈVE 2030
            </h6>

        </div>
    </div>
</template>
<script>
export default {
    name: "logo",
    props: ["color"]
};
</script>

<style></style>
