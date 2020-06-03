<template>
    <div class="px-3">
        <b-row>
            <b-col lg="12" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-left px-3 mb0">2020</h6>
                <div v-for="item in items" :key="item.id+'_2020'">
                <div class="px-3 pb-3">{{item.year_2020}} </div>
                </div>
            </b-col>

            <b-col lg="12" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-left px-3 mb0">2021</h6>
                <div v-for="item in items" :key="item.id+'_2021'">
                <div class="px-3 pb-3">{{item.year_2021}} </div>
                </div>
            </b-col>

            <b-col lg="12" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-left px-3 mb0">2022</h6>
                <div v-for="item in items" :key="item.id+'_2022'">
                <div class="px-3 pb-3">{{item.year_2022}} </div>
                </div>
            </b-col>

            <b-col lg="12" class="calendar my-1">
                <h6 :style="'color:'+color" class="text-left px-3 mb0">2023</h6>
                <div v-for="item in items" :key="item.id+'_2023'">
                <div class="px-3 pb-3">{{item.year_2023}} </div>
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

</style>
