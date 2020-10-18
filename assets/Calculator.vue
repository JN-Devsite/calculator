<template>
    <div class="calculator">
        <div class="display">{{current || '0'}}</div>
        <div @click="clear" class="btn">AC</div>
        <div @click="sign" class="btn">+/-</div>
        <div @click="percent" class="btn">%</div>
        <div @click="divide" class="btn operator">&div;</div>
        <div @click="append('7')" class="btn">7</div>
        <div @click="append('8')" class="btn">8</div>
        <div @click="append('9')" class="btn">9</div>
        <div @click="multiply" class="btn operator">x</div>
        <div @click="append('4')" class="btn">4</div>
        <div @click="append('5')" class="btn">5</div>
        <div @click="append('6')" class="btn">6</div>
        <div @click="subtract" class="btn operator">-</div>
        <div @click="append('1')" class="btn">1</div>
        <div @click="append('2')" class="btn">2</div>
        <div @click="append('3')" class="btn">3</div>
        <div @click="add" class="btn operator">+</div>
        <div @click="append('0')" class="btn zero">0</div>
        <div @click="period()" class="btn">.</div>
        <div @click="equal" class="btn operator">=</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            current: '', 
            prev: null,
            operator: null, 
            operatorClicked: false
        }
    }, 
    methods: {
        clear() {
            this.current = '';
        }, 
        sign() {
            this.current = this.current.charAt(0) === '-' ? this.current.slice(1) : `-${this.current}`;
        }, 
        percent() {
            this.current = `${parseFloat(this.current) / 100}`
        }, 
        append(num) {
            if(this.operatorClicked) {
                this.current = '';
                this.operatorClicked = false;
            }
            this.current = `${this.current}${num}`;
        }, 
        period() {
            if (this.current.indexOf('.') === -1) {
                this.append('.');
            }
        }, 
        setPrev() {
            this.prev = this.current;
            this.operatorClicked = true;
        },
        divide() {
            this.operator = (a, b) => b / a;
            this.setPrev();
        },
        multiply() {
            this.operator = (a, b) => a * b;
            this.setPrev();
        },
        subtract() {
            this.operator = (a, b) => a - b;
            this.setPrev();
        }, 
        add() {
            this.operator = (a, b) => a + b;
            this.setPrev();
        }, 
        equal() {
            this.current = `${this.operator(parseFloat(this.current), parseFloat(this.prev))}`;
            this.prev = null;
        }

    }
}
</script>

<style scoped>
    
</style>