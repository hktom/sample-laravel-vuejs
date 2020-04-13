<template>
    <div>
        <b-row>
            <b-col lg="3" class="calendar">
                <h6>2020</h6>
                <div v-for="item in items" :key="item.id+'_2020'">
                <p>{{item.year_2020}} </p>
                </div>
            </b-col>

            <b-col lg="3" class="calendar">
                <h6>2021</h6>
                <div v-for="item in items" :key="item.id+'_2021'">
                <p>{{item.year_2021}} </p>
                </div>
            </b-col>

            <b-col lg="3" class="calendar">
                <h6>2022</h6>
                <div v-for="item in items" :key="item.id+'_2022'">
                <p>{{item.year_2022}} </p>
                </div>
            </b-col>

            <b-col lg="3" class="calendar">
                <h6>2023</h6>
                <div v-for="item in items" :key="item.id+'_2023'">
                <p>{{item.year_2023}} </p>
                </div>
            </b-col>

        </b-row>
    </div>
</template>

<script>
export default {
    name:"actionCalendar",
    props:["items"]
}

</script>

<style>
.calendar{
    /* border:0.5px solid #E9EBEC; */
    text-align: center;
    padding-left: 2px !important;
    padding-right: 2px !important;
    box-shadow: 0 0.5em 1em rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    border-radius: 5px;

}

.calendar h6{background-color: #17A2B8;color: white;padding: 4px 0px 4px 0px}
</style>
