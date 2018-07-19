# PHP结合MySQL

* 代理
* 策略
* 职责链
* 观察者

通用类负责连接，代理模式保证安全。

### 代理模式
代理模式是一种结构型设计模式。参与者主要有两个，即代理对象和真实对象。

* 远程代理
    - 代理对象在一个地址空间，而实际对象在另一个地址空间，此时代理就是远程的。除了使用远程代理做防火墙，远程代理还可以用于在线游戏平台。
* 虚拟代理
    - 虚拟代理可以缓存一个真实主题的有关信息，从而能延迟对这个真实主体的访问。有时候在真实对象处理登录数据之前，高安全性登录会使用一个虚拟代理来完成登录。
* 保护代理
    - 保护代理只有在验证通过之后，才会把请求发送给真实主题。这个真实主题就是请求的目标，如访问数据库信息。根据用户的登录信息，很多保护代理会提供级别的访问；并不是建立一个真实主题，真是主体可能是多个，而且是受限的。
* 智能引用
    - 程序可以使用"裸指针"，不过如果这个指针不能满足程序的需要，代理就相当于一个智能引用，可以在引用对象时完成额外的动作。例如，可能受限由作为智能引用的代理参加者加载一个数据库的数据。
    