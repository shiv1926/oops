<?php include('../header.php'); ?>
7) Association
Association is a relationship between two objects. It defines the diversity between objects. In this OOP concept, all object have their separate lifecycle, and there is no owner. For example, many students can associate with one teacher while one student can also associate with multiple teachers.

8) Aggregation
In this technique, all objects have their separate lifecycle. However, there is ownership such that child object can’t belong to another parent object. For example consider class/objects department and teacher. Here, a single teacher can’t belong to multiple departments, but even if we delete the department, the teacher object will never be destroyed.

9) Composition
A composition is a specialized form of Aggregation. It is also called "death" relationship. Child objects do not have their lifecycle so when parent object deletes all child object will also delete automatically. For that, let’s take an example of House and rooms. Any house can have several rooms. One room can’t become part of two different houses. So, if you delete the house room will also be deleted.

<?php include('../footer.php'); ?>