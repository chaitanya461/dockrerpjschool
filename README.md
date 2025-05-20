-- Connect to PostgreSQL and run
CREATE TABLE students (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    grade VARCHAR(50),
    created_at TIMESTAMP DEFAULT NOW()
);

CREATE TABLE contacts (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT NOW()
);
