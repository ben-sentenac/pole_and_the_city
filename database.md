[Entité] Disciplines
- **id (PK - orange)**
- name
- description

[Entité] Courses
- **id (PK - orange)**
- name
- **dicipline_id (FK - vert)** --> discipline

[Entité] teachers
- **id (PK - orange)**
- name
- lastname
- nickname
- resume

[Entité] medias
- **id (PK - orange)**
- url
- type (par exemple, image, vidéo, etc.)
- hash
- storage

[Entité] events
- **id (PK - orange)**
- name
- description
- location
- date
- time
- max_attendees
- reservation_deadline
- category_id

[table pivot] course_teacher
- **id (PK)**
- course_id (FK) -> courses.id
- teacher_id (FK) -> teacher.id

[table pivot] course_diciplines
- **id (PK)**
- course_id (FK) -> courses.id
- dicipline_id (FK) -> dicipline.id