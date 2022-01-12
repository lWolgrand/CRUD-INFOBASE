CREATE TABLE games(
    game_id SERIAL PRIMARY KEY,
    name TEXT NOT NULL,
    plataform TEXT NOT NULL,
    launch_date DATE NOT NULL,
    price INT NOT NULL,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP
)