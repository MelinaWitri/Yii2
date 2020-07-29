--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: country; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.country (
    id integer NOT NULL,
    country character varying(225) NOT NULL,
    country_code integer NOT NULL
);


ALTER TABLE public.country OWNER TO postgres;

--
-- Name: departments; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.departments (
    id integer NOT NULL,
    dep_name character varying(255),
    dep_desc character varying(255),
    dep_code integer,
    institution_id integer,
    "createdAt" timestamp(6) with time zone NOT NULL,
    "updatedAt" timestamp(6) with time zone,
    deleted_at timestamp(6) without time zone
);


ALTER TABLE public.departments OWNER TO postgres;

--
-- Name: departments_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.departments_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.departments_id_seq OWNER TO postgres;

--
-- Name: departments_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.departments_id_seq OWNED BY public.departments.id;


--
-- Name: divisions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.divisions (
    id integer NOT NULL,
    div_name character varying(255),
    div_desc character varying(255),
    institution_id integer,
    dep_id integer,
    "createdAt" timestamp(6) with time zone NOT NULL,
    "updatedAt" timestamp(6) with time zone
);


ALTER TABLE public.divisions OWNER TO postgres;

--
-- Name: divisions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.divisions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.divisions_id_seq OWNER TO postgres;

--
-- Name: divisions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.divisions_id_seq OWNED BY public.divisions.id;


--
-- Name: institutions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.institutions (
    id integer NOT NULL,
    name character varying(255),
    logo character varying(255),
    telephone character varying(255),
    fax character varying(255),
    email character varying(255),
    postal_code integer,
    address character varying(255),
    country integer,
    country_code character varying(5),
    province integer,
    current_safety integer,
    current_security integer,
    current_usage integer,
    current_value integer,
    number_building integer,
    number_level integer,
    number_room integer,
    "createdAt" timestamp(6) with time zone NOT NULL,
    "updatedAt" timestamp(6) with time zone
);


ALTER TABLE public.institutions OWNER TO postgres;

--
-- Name: institutions_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.institutions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.institutions_id_seq OWNER TO postgres;

--
-- Name: institutions_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.institutions_id_seq OWNED BY public.institutions.id;


--
-- Name: levels; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.levels (
    id integer NOT NULL,
    level_name character varying(255),
    number_rooms integer,
    current_safety integer,
    current_security integer,
    current_productivity integer,
    image character varying(255),
    safety_feature character varying(255),
    security_feature character varying(255),
    material_floor character varying(255),
    building_id integer,
    institution_id integer,
    "createdAt" timestamp(6) with time zone NOT NULL,
    "updatedAt" timestamp(6) with time zone,
    deleted_at timestamp(6) without time zone
);


ALTER TABLE public.levels OWNER TO postgres;

--
-- Name: levels_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.levels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    MAXVALUE 2147483647
    CACHE 1;


ALTER TABLE public.levels_id_seq OWNER TO postgres;

--
-- Name: levels_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.levels_id_seq OWNED BY public.levels.id;


--
-- Name: province; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.province (
    id integer NOT NULL,
    country_id integer NOT NULL,
    province character varying NOT NULL
);


ALTER TABLE public.province OWNER TO postgres;

--
-- Name: departments id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.departments ALTER COLUMN id SET DEFAULT nextval('public.departments_id_seq'::regclass);


--
-- Name: divisions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions ALTER COLUMN id SET DEFAULT nextval('public.divisions_id_seq'::regclass);


--
-- Name: institutions id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.institutions ALTER COLUMN id SET DEFAULT nextval('public.institutions_id_seq'::regclass);


--
-- Name: levels id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.levels ALTER COLUMN id SET DEFAULT nextval('public.levels_id_seq'::regclass);


--
-- Data for Name: country; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.country (id, country, country_code) FROM stdin;
1	Indonesia	62
2	Malaysia	60
\.


--
-- Data for Name: departments; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.departments (id, dep_name, dep_desc, dep_code, institution_id, "createdAt", "updatedAt", deleted_at) FROM stdin;
2	ABC	abcde	123	2	2020-07-07 12:07:03+07	\N	\N
\.


--
-- Data for Name: divisions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.divisions (id, div_name, div_desc, institution_id, dep_id, "createdAt", "updatedAt") FROM stdin;
2	Supervisor 	abcde	2	123	2020-07-07 12:07:03+07	\N
3	qwert	asecf	2	123	2020-07-07 12:07:03+07	\N
4	dxxd	cdcedc	2	123	2020-07-07 12:07:03+07	\N
\.


--
-- Data for Name: institutions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.institutions (id, name, logo, telephone, fax, email, postal_code, address, country, country_code, province, current_safety, current_security, current_usage, current_value, number_building, number_level, number_room, "createdAt", "updatedAt") FROM stdin;
2	ABC		0778-8888	021-29222-989	ABC@gmail.com	123	Jl. nanas	123	123	456	456	456	456	456	456	456	456	2020-07-07 14:07:03+07	\N
14	qwerty		0778-6565	021-29222-888	z@gmail.com	123	Jl. mangga	\N	123	\N	111	678	456	456	456	456	456	2020-07-25 00:00:00+07	\N
15	qwerty		0778-6565	021-29222-888	z@gmail.com	123	Jl. mangga	\N	123	\N	111	678	456	456	456	456	456	2020-07-25 00:00:00+07	\N
\.


--
-- Data for Name: levels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.levels (id, level_name, number_rooms, current_safety, current_security, current_productivity, image, safety_feature, security_feature, material_floor, building_id, institution_id, "createdAt", "updatedAt", deleted_at) FROM stdin;
11	ABC	123	456	456	456		456	456	ABC	2	2	2020-07-07 12:07:03+07	\N	\N
13		\N	2	2	\N					\N	2	2020-07-16 00:00:00+07	\N	\N
14		\N	2	2	\N					\N	2	2020-07-16 00:00:00+07	\N	\N
\.


--
-- Data for Name: province; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.province (id, country_id, province) FROM stdin;
1	1	Nanggroe Aceh Darussalamalam
3	2	Johor
2	1	Sumatera Barat
\.


--
-- Name: departments_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.departments_id_seq', 8, true);


--
-- Name: divisions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.divisions_id_seq', 4, true);


--
-- Name: institutions_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.institutions_id_seq', 15, true);


--
-- Name: levels_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.levels_id_seq', 14, true);


--
-- Name: country country_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.country
    ADD CONSTRAINT country_pkey PRIMARY KEY (id);


--
-- Name: departments departments_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.departments
    ADD CONSTRAINT departments_pk PRIMARY KEY (id);


--
-- Name: divisions divisions_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.divisions
    ADD CONSTRAINT divisions_pk PRIMARY KEY (id);


--
-- Name: institutions institutions_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.institutions
    ADD CONSTRAINT institutions_pk PRIMARY KEY (id);


--
-- Name: levels levels_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.levels
    ADD CONSTRAINT levels_pk PRIMARY KEY (id);


--
-- Name: province province_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.province
    ADD CONSTRAINT province_pkey PRIMARY KEY (id);


--
-- Name: departments departments_fk_institution; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.departments
    ADD CONSTRAINT departments_fk_institution FOREIGN KEY (institution_id) REFERENCES public.institutions(id);


--
-- Name: levels levels_fk_institution; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.levels
    ADD CONSTRAINT levels_fk_institution FOREIGN KEY (institution_id) REFERENCES public.institutions(id);


--
-- PostgreSQL database dump complete
--

