<script>
    //var employees = new Array();
    //console.log (employees);

    function Car() {
        this.name = 'BMW';
        this.model = 'M4';
        //this.enginCapacity = '1323';
    }

    Car.prototype.enginCapacity = 5000;

    var bmw = new Car();
    console.log ("bmw:", bmw.enginCapacity);

    var audi = new Car();
    console.log ("audi:", audi.enginCapacity);
</script>