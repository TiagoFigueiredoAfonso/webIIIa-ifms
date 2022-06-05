PGDMP         (                z            webIII2022a     13.7 (Ubuntu 13.7-1.pgdg20.04+1)     14.3 (Ubuntu 14.3-1.pgdg20.04+1) C               0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    18887    webIII2022a    DATABASE     b   CREATE DATABASE "webIII2022a" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.UTF-8';
    DROP DATABASE "webIII2022a";
                postgres    false            �            1259    18922    area    TABLE     \   CREATE TABLE public.area (
    id integer NOT NULL,
    descricao character varying(100)
);
    DROP TABLE public.area;
       public         heap    postgres    false            �            1259    18920    area_id_seq    SEQUENCE     �   CREATE SEQUENCE public.area_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.area_id_seq;
       public          postgres    false    203                       0    0    area_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.area_id_seq OWNED BY public.area.id;
          public          postgres    false    202            �            1259    18953    cidade    TABLE     Y   CREATE TABLE public.cidade (
    id integer NOT NULL,
    nome character varying(100)
);
    DROP TABLE public.cidade;
       public         heap    postgres    false            �            1259    18951    cidade_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cidade_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.cidade_id_seq;
       public          postgres    false    205                       0    0    cidade_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.cidade_id_seq OWNED BY public.cidade.id;
          public          postgres    false    204            �            1259    18914    empresa    TABLE     �   CREATE TABLE public.empresa (
    id integer NOT NULL,
    nome character varying(100),
    endereco character varying(100),
    area_id integer,
    imagem character varying(50),
    cidade_id integer,
    segmento_id integer
);
    DROP TABLE public.empresa;
       public         heap    postgres    false            �            1259    18912    empresa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.empresa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.empresa_id_seq;
       public          postgres    false    201                       0    0    empresa_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.empresa_id_seq OWNED BY public.empresa.id;
          public          postgres    false    200            �            1259    19024    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    19022    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    214                       0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    213            �            1259    18996 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    18994    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    209                       0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    208            �            1259    19015    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    19038    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    19036    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    216                       0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    215            �            1259    18961    segmento    TABLE     [   CREATE TABLE public.segmento (
    id integer NOT NULL,
    nome character varying(100)
);
    DROP TABLE public.segmento;
       public         heap    postgres    false            �            1259    18959    segmento_id_seq    SEQUENCE     �   CREATE SEQUENCE public.segmento_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.segmento_id_seq;
       public          postgres    false    207                       0    0    segmento_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.segmento_id_seq OWNED BY public.segmento.id;
          public          postgres    false    206            �            1259    19004    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    19002    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    211                       0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    210            ]           2604    18925    area id    DEFAULT     b   ALTER TABLE ONLY public.area ALTER COLUMN id SET DEFAULT nextval('public.area_id_seq'::regclass);
 6   ALTER TABLE public.area ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203            ^           2604    18956 	   cidade id    DEFAULT     f   ALTER TABLE ONLY public.cidade ALTER COLUMN id SET DEFAULT nextval('public.cidade_id_seq'::regclass);
 8   ALTER TABLE public.cidade ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            \           2604    18917 
   empresa id    DEFAULT     h   ALTER TABLE ONLY public.empresa ALTER COLUMN id SET DEFAULT nextval('public.empresa_id_seq'::regclass);
 9   ALTER TABLE public.empresa ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    200    201    201            b           2604    19027    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    213    214            `           2604    18999    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208    209            d           2604    19041    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            _           2604    18964    segmento id    DEFAULT     j   ALTER TABLE ONLY public.segmento ALTER COLUMN id SET DEFAULT nextval('public.segmento_id_seq'::regclass);
 :   ALTER TABLE public.segmento ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    206    207    207            a           2604    19007    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    211    211                      0    18922    area 
   TABLE DATA           -   COPY public.area (id, descricao) FROM stdin;
    public          postgres    false    203   �J                 0    18953    cidade 
   TABLE DATA           *   COPY public.cidade (id, nome) FROM stdin;
    public          postgres    false    205   �J                  0    18914    empresa 
   TABLE DATA           ^   COPY public.empresa (id, nome, endereco, area_id, imagem, cidade_id, segmento_id) FROM stdin;
    public          postgres    false    201   "K                 0    19024    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    214   !L                 0    18996 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    209   >L                 0    19015    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    212   �L                 0    19038    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    216   �L                 0    18961    segmento 
   TABLE DATA           ,   COPY public.segmento (id, nome) FROM stdin;
    public          postgres    false    207    M       
          0    19004    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public          postgres    false    211   BM                  0    0    area_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.area_id_seq', 8, true);
          public          postgres    false    202                       0    0    cidade_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cidade_id_seq', 7, true);
          public          postgres    false    204                        0    0    empresa_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.empresa_id_seq', 12, true);
          public          postgres    false    200            !           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    213            "           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);
          public          postgres    false    208            #           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    215            $           0    0    segmento_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.segmento_id_seq', 4, true);
          public          postgres    false    206            %           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 2, true);
          public          postgres    false    210            h           2606    18927    area area_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.area
    ADD CONSTRAINT area_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.area DROP CONSTRAINT area_pkey;
       public            postgres    false    203            j           2606    18958    cidade cidade_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.cidade
    ADD CONSTRAINT cidade_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.cidade DROP CONSTRAINT cidade_pkey;
       public            postgres    false    205            f           2606    18919    empresa empresa_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT empresa_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.empresa DROP CONSTRAINT empresa_pkey;
       public            postgres    false    201            u           2606    19033    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    214            w           2606    19035 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    214            n           2606    19001    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    209            y           2606    19046 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    216            {           2606    19049 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    216            l           2606    18966    segmento segmento_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.segmento
    ADD CONSTRAINT segmento_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.segmento DROP CONSTRAINT segmento_pkey;
       public            postgres    false    207            p           2606    19014    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    211            r           2606    19012    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    211            s           1259    19021    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    212            |           1259    19047 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    216    216               <   x�3�t�,.)�L*�L�/J�2�tL)�ONL�L�2�t,ILNL�WHUK,J������� Ê         -   x�3�t,,�LI,M�K�2�I-J��/�2��J,J������� �&
�          �   x�]�;n�@����Ya ��;�&X��<30�O���*[Ho,(�R�y�ŽG�¢�0��A%˾��,P����3�4�	�Ca$�l�%����,ڒlE����ń]_�&M��$�YB6~��cKX~�8�)�7��'̠۞b�W�k�|[gO�U���t�P�������W�"t���:���{���q�'��҇�4���<�"��so��ġ��n��g�g��Y�gUEQ�@	S�            x������ � �         x   x�U�A�0��1U��P���2��(��T�~I�����]S�,y�9��!d�"��dE�1JGƝA��oV��<!�Jiʽ*=�5/ʓ�(^il���Z�w���퓴r� �)i������(6>}            x������ � �            x������ � �         2   x�3���K9����(3�ˈ�9?��ʢ��|.c��Ԣ�����b���� PU�      
     x�m�Mo�0 ���+<x�k��dPą��ǌ�jk)
(-����Öe�'y��M���\HUZ��k�Ep*2�h}���p[b�j?V�#�s���^%�����J*~����p�|�1�x ��0�G�6�����X^h�Ip�b�d��0�*Jrŀ8g0Z�c���$v��2J�U4n� 4��KfT��k�6`�ƫv���1��ڣl-��ѽ݄�$w��t6M:�\~��}�ܳ�uV�pΚԱ��M�����e����C������j�     