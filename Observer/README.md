# 观察者模式
1. 当一个对象状态发生改变时，依赖他的对象全部会收到通知，并自动更新。
2. 场景：当一个事件发生后，要执行一连串更新操作。传统操作是在事件发生后的代码中直接处理逻辑。当新的逻辑增加时，代码变的难以维护。这种方式是耦合的，侵入式修改的。增加逻辑需要修改事件主体的代码。
3. 观察着实现了低耦合，非侵入式的通知和更新机制。

实现思路：
1. 定义一个事件产生者抽象类（EventGenerator），类中声明受保护的观察者数组($observers)。声明并实现两个方法(addObserver，notify)，一个用来添加观察者（注意用接口的类型限制调用），一个用来遍历所有的观察者类，通知每个观察者执行更新操作；
2. 定义个事件观察者的接口(Observer)，接口中声明更新操作的方法(update)；
3. 定义个事件触发类（Event）继承EventGenerator,声明触发事件的方法trigger(),在方法中实现通知；
4. 实例化事件触发类，添加观察者1，2，3.。。。，触发事件。



### SPL有三个接口可以实现观察者模式

* SplSubject
   - abstract public function attach(SplObserver $observer)
   - abstract public function detach(SplObserver $observer)
   - abstract public function notify(void)
* SplObserver
   - public function update(SplSubject $subject);
* SplObjectStorage