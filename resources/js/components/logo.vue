<template>
    <div>
        <div class="d-flex flex-row bd-highlight align-items-top">
            <!-- color logo -->
            <div v-if="color == 'black'">
                <img
                    style="width:30px;vertical-align: top;"
                    class="mr-1"
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

            <div
            v-if="color == 'black'"
                style="line-height: 1rem !important;"
            >
            <h1 class="mx-0 px-0 fs0-5 vls-fs0-7 ls-fs0-7 lms-fs0-6 ms-fs0-6" style="margin-top: -0.2rem">
                PLAN BIODIVERSITÉ 2020-2023 <br /> DE LA STRATÉGIE BIODIVERSITÉ <br class="ls-hidden ms-hidden lms-hidden vls-hidden"/>GENÈVE 2030
            </h1>
            <!-- <h1 class="ls-hidden ms-hidden lms-hidden vls-hidden mx-0 px-0  fs0-5">
                PLAN BIODIVERSITÉ 2020-2023
                <br /> DE LA STRATÉGIE BIODIVERSITÉ
                <br/> GENÈVE 2030
            </h1> -->
            </div>

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
