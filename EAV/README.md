# Decorator mode

实体属性值模型（Entity-attribute-value EAV）是一种用数据模型描述实体的属性（属性，参数）的设计模式。
详情可见：https://www.cnblogs.com/sthinker/p/5882520.html

在EAV数据模型中，只有非空值才存储在数据库中，每个属性-值（或键-值）对描述一个给定实体的属性。
EAV表经常定性为“长瘦（long and skinny）”的，“长”是指描述实体的多个行，而“瘦”则指仅使用少量的列。

应用实体-属性-值时，应考虑以下条件：

* 数据是稀疏的、异构的，一个实体的属性范围较广，且常引入新的属性。
* 类的数量非常大，有许多实例类，即使属性是非稀疏的。
* 有许多混合类，既具有稀疏也具有非稀疏属性。通常情况下，并不是所有的数据类满足EAV建模的要求。