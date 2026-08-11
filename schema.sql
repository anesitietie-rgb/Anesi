-- RUGBY GEAR — database schema
-- Run this once against your 'RUGBY GEAR' database before using the app.

CREATE TABLE IF NOT EXISTS Manager (
    id                  INT AUTO_INCREMENT PRIMARY KEY,
    rugby_gears_name    VARCHAR(50)  NOT NULL,
    borrower_name       VARCHAR(50)  NOT NULL,
    borrow_date         DATE
    due_back            DATE
    notes               VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS loans (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    coach_name      VARCHAR(50)  NOT NULL,
    coach_email     VARCHAR(50)  NOT NULL,
    birth_date      DATE(50)     NOT NULL,
    phone_number    INT(50)      NOT NULL,
    coach_height    INT              NULL,      
    notes           VARCHAR(200)     NULL,
    logged_by       INT              NULL,      
    FOREIGN KEY (logged_by) REFERENCES Manager(id)
);

-- Demo monitor account: manager@school.nz / password123
-- (the hash below is a real bcrypt hash of "password123")
INSERT INTO coach (firstname, lastname, email, password) VALUES
    ('Alex', 'Ngata', 'manager@school.nz', 'password6767676767');

-- A few sample loans so view_loans.php / manage_loans.php show something immediately.
INSERT INTO loans (item_name, borrower_name, borrowed_date, due_back, returned_date, logged_by) VALUES
    ('rugby ball',          'Sami A.', '2026-06-21', '2026-07-27', NULL,         1),
    ('uniform',             'Ray M.',  '2026-07-14', '2026-07-24', NULL,         1), -- deliberately overdue
    ('mouth guard',         'Jaxon M.',   '2026-08-15', '2026-09-07', '2026-07-19', 1);