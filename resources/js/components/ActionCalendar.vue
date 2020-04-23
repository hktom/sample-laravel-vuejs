<template>
    <div class="px-3">
        <b-row>
            <b-col lg="6" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-center">2020</h6>
                <div v-for="item in items" :key="item.id+'_2020'">
                <div class="py-3 px-3">{{item.year_2020}} </div>
                </div>
            </b-col>

            <b-col lg="6" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-center">2021</h6>
                <div v-for="item in items" :key="item.id+'_2021'">
                <div class="py-3 px-3">{{item.year_2021}} </div>
                </div>
            </b-col>

            <b-col lg="6" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-center">2022</h6>
                <div v-for="item in items" :key="item.id+'_2022'">
                <div class="py-3 px-3">{{item.year_2022}} </div>
                </div>
            </b-col>

            <b-col lg="6" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-center">2023</h6>
                <div v-for="item in items" :key="item.id+'_2023'">
                <div class="py-3 px-3">{{item.year_2023}} </div>
                </div>
            </b-col>

        </b-row>
    </div>
</template>

<script>
export default {
    name:"actionCalendar",
    props:["items", "color"]
}

</script>

<style>
.calendar{
    /* border:0.5px solid #E9EBEC; */
    text-align: left;
    padding-left: 2px !important;
    padding-right: 2px !important;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    border-radius: 5px;

}

.calendar h6{color: black;padding: 4px 0px 4px 0px}
</style>
