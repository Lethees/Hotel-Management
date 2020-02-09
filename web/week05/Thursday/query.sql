\echo '2a. How many events are there?'
---------------- Your code here ----------------
SELECT COUNT(id) AS "Number of Events"
FROM w5_EVENT_TYPE; 
-- \echo '2b. How many participants are there?'
---------------- Your code here ----------------
SELECT COUNT(id) AS "Number of Participants"
FROM w5_EVENT; 
-- \echo '3a. What is the third event when sorted alphabetically (by name)? '
---------------- Your code here ----------------
SELECT
    *FROM
    w5_EVENT_TYPE 
    ORDER BY
    name
LIMIT 1 OFFSET 2;
-- \echo '3b. What is the third event when sorted by ID? '
---------------- Your code here ----------------
SELECT
    *FROM
    w5_EVENT 
    ORDER BY
    id
LIMIT 1 OFFSET 2;
-- \echo '4a. List the names alphabetically of all the participants in the ''Toughman Utah'' competition'
---------------- Your code here ----------------
SELECT p.name
FROM   w5_PARTICIPANT p
JOIN   w5_EVENT_PARTICIPANT ep
ON     p.id = ep.participant_id
JOIN   w5_EVENT e
ON     ep.event_id = e.id
JOIN   w5_EVENT_TYPE t
ON     e.type = t.id
WHERE  e.name = 'Toughman Utah'
ORDER BY p.name;
-- \echo '4b. List the names (sorted by id) of all the participants in the ''Kauai Marathon'' competition'
---------------- Your code here ----------------
SELECT p.name
FROM   w5_PARTICIPANT p
JOIN   w5_EVENT_PARTICIPANT ep
ON     p.id = ep.participant_id
JOIN   w5_EVENT e
ON     ep.event_id = e.id
JOIN   w5_EVENT_TYPE t
ON     e.type = t.id
WHERE e.name = 'Kauai Marathon'
ORDER BY p.id;
-- \echo '5a. How many competitions has ''Black Panther'' competed in?'
---------------- Your code here ----------------
SELECT COUNT(e.id) as "Competitions"
FROM w5_EVENT e
JOIN w5_EVENT_TYPE et
ON e.type = et.id
JOIN w5_EVENT_PARTICIPANT ep
ON e.id = ep.event_id
JOIN w5_PARTICIPANT p
ON ep.participant_id = p.id
WHERE p.name = 'Black Panther';

-- \echo '5b. How can you verify that your count is correct?'  
---------------- Your code here ----------------
SELECT id
FROM w5_PARTICIPANT
WHERE name='Black Panther';

SELECT ep.id, e.id, p.id
FROM   w5_PARTICIPANT p
JOIN   w5_EVENT_PARTICIPANT ep
ON     p.id = ep.participant_id
JOIN   w5_EVENT e
ON     ep.event_id = e.id
JOIN   w5_EVENT_TYPE t
ON     e.type = t.id
WHERE  p.name = 'Black Panther';

-- \echo '5c. Who has competed in the most competitions? How many have they competed in?'
---------------- Your code here ----------------
SELECT TOP 1 
       p.name
FROM   w5_PARTICIPANT p
JOIN   w5_EVENT_PARTICIPANT ep
ON     p.id = ep.participant_id
JOIN   w5_EVENT e
ON     ep.event_id = e.id
JOIN   w5_EVENT_TYPE t
ON     e.type = t.id
GROUP BY p.name
ORDER BY count(e.id) desc;
-- \echo '5d. Who has competed in the least competitions? How many have they competed in?'
---------------- Your code here ----------------

-- \echo '5d. people who have competed in 1 or more'
---------------- Your code here ----------------

-- \echo '5d. - people that didn''t compete in any'
---------------- Your code here ----------------

-- \echo '6a. Is there anyone who has competed in the same competition twice? '
---------------- Your code here ----------------

-- \echo '6b. Which event had the most competitors? '
---------------- Your code here ----------------

-- \echo '6c. Which event had the least competitors? '
---------------- Your code here ----------------

-- \echo '6d. List all competitors that competed in the same event at least once '
---------------- Your code here ----------------
