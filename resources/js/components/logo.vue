<template>
    <div class="w100">
        <div class="d-flex flex-row bd-highlight align-items-center">
            <div v-if="color == 'black'">
                <img
                    style="width:50px"
                    class="mr-2"
                    src="/img/plan_biodiversite_logo.png"
                />
            </div>

            <div v-else>
                <img
                    style="width:50px"
                    class="mr-2"
                    src="/img/logo_white.png"
                />
            </div>

            <h6
            v-if="color == 'black'"
                :class="color + ' mx-0 px-0  fs0-4 bold inline-block'"
                style="line-height: 1rem;"
            >

            PLAN BIODIVERSITÉ 2020-2023 <br />
                DE LA STRATÉGIE BIODIVERSITÉ <br />
                GENÈVE 2030

            </h6>

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
