# 工厂方法（代加工）实现流程
参与对象：甲方、乙方、外包
1. 甲方提需求，想要购买一些产品，并下订单
2. 乙方根据需求设计产品原型（Product ）
3. 乙方设计图纸（Creator）
4. 乙方找外包工厂（BikeFactory、CarFactory）
5. 外包根据设计图纸，制定详细加工工艺（BikeProduct、CarProduct），生产产品并交付。

