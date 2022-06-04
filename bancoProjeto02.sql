PGDMP                         z            webIII2022a     13.7 (Ubuntu 13.7-1.pgdg20.04+1)     14.3 (Ubuntu 14.3-1.pgdg20.04+1) ,    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    18887    webIII2022a    DATABASE     b   CREATE DATABASE "webIII2022a" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.UTF-8';
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
       public          postgres    false    207            �           0    0    area_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.area_id_seq OWNED BY public.area.id;
          public          postgres    false    206            �            1259    18908 	   categoria    TABLE     �   CREATE TABLE public.categoria (
    id integer NOT NULL,
    descricao character varying(100),
    imagem character varying(50)
);
    DROP TABLE public.categoria;
       public         heap    postgres    false            �            1259    18906    categoria_id_seq    SEQUENCE     �   CREATE SEQUENCE public.categoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.categoria_id_seq;
       public          postgres    false    203            �           0    0    categoria_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;
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
       public          postgres    false    209            �           0    0    cidade_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.cidade_id_seq OWNED BY public.cidade.id;
          public          postgres    false    208            �            1259    18914    empresa    TABLE     �   CREATE TABLE public.empresa (
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
       public          postgres    false    205            �           0    0    empresa_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.empresa_id_seq OWNED BY public.empresa.id;
          public          postgres    false    204            �            1259    18899    noticia    TABLE     �   CREATE TABLE public.noticia (
    id integer NOT NULL,
    titulo character varying(100),
    descricao character varying(1000),
    data date,
    autor character varying(100),
    categoria_id integer,
    imagem character varying(50)
);
    DROP TABLE public.noticia;
       public         heap    postgres    false            �            1259    18897    noticia_id_seq    SEQUENCE     �   CREATE SEQUENCE public.noticia_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.noticia_id_seq;
       public          postgres    false    201            �           0    0    noticia_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.noticia_id_seq OWNED BY public.noticia.id;
          public          postgres    false    200            �            1259    18961    segmento    TABLE     [   CREATE TABLE public.segmento (
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
       public          postgres    false    211            �           0    0    segmento_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.segmento_id_seq OWNED BY public.segmento.id;
          public          postgres    false    210            L           2604    18925    area id    DEFAULT     b   ALTER TABLE ONLY public.area ALTER COLUMN id SET DEFAULT nextval('public.area_id_seq'::regclass);
 6   ALTER TABLE public.area ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    206    207            J           2604    18911    categoria id    DEFAULT     l   ALTER TABLE ONLY public.categoria ALTER COLUMN id SET DEFAULT nextval('public.categoria_id_seq'::regclass);
 ;   ALTER TABLE public.categoria ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    202    203    203            M           2604    18956 	   cidade id    DEFAULT     f   ALTER TABLE ONLY public.cidade ALTER COLUMN id SET DEFAULT nextval('public.cidade_id_seq'::regclass);
 8   ALTER TABLE public.cidade ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208    209            K           2604    18917 
   empresa id    DEFAULT     h   ALTER TABLE ONLY public.empresa ALTER COLUMN id SET DEFAULT nextval('public.empresa_id_seq'::regclass);
 9   ALTER TABLE public.empresa ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            I           2604    18902 
   noticia id    DEFAULT     h   ALTER TABLE ONLY public.noticia ALTER COLUMN id SET DEFAULT nextval('public.noticia_id_seq'::regclass);
 9   ALTER TABLE public.noticia ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    200    201    201            N           2604    18964    segmento id    DEFAULT     j   ALTER TABLE ONLY public.segmento ALTER COLUMN id SET DEFAULT nextval('public.segmento_id_seq'::regclass);
 :   ALTER TABLE public.segmento ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    210    211            �          0    18922    area 
   TABLE DATA           -   COPY public.area (id, descricao) FROM stdin;
    public          postgres    false    207   �,       �          0    18908 	   categoria 
   TABLE DATA           :   COPY public.categoria (id, descricao, imagem) FROM stdin;
    public          postgres    false    203   �,       �          0    18953    cidade 
   TABLE DATA           *   COPY public.cidade (id, nome) FROM stdin;
    public          postgres    false    209   �-       �          0    18914    empresa 
   TABLE DATA           ^   COPY public.empresa (id, nome, endereco, area_id, imagem, cidade_id, segmento_id) FROM stdin;
    public          postgres    false    205   �-       �          0    18899    noticia 
   TABLE DATA           [   COPY public.noticia (id, titulo, descricao, data, autor, categoria_id, imagem) FROM stdin;
    public          postgres    false    201   �.       �          0    18961    segmento 
   TABLE DATA           ,   COPY public.segmento (id, nome) FROM stdin;
    public          postgres    false    211   �/       �           0    0    area_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.area_id_seq', 8, true);
          public          postgres    false    206            �           0    0    categoria_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.categoria_id_seq', 7, true);
          public          postgres    false    202            �           0    0    cidade_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cidade_id_seq', 6, true);
          public          postgres    false    208            �           0    0    empresa_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.empresa_id_seq', 11, true);
          public          postgres    false    204            �           0    0    noticia_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.noticia_id_seq', 9, true);
          public          postgres    false    200            �           0    0    segmento_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.segmento_id_seq', 4, true);
          public          postgres    false    210            R           2606    18927    area area_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.area
    ADD CONSTRAINT area_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.area DROP CONSTRAINT area_pkey;
       public            postgres    false    207            T           2606    18958    cidade cidade_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.cidade
    ADD CONSTRAINT cidade_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.cidade DROP CONSTRAINT cidade_pkey;
       public            postgres    false    209            P           2606    18919    empresa empresa_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT empresa_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.empresa DROP CONSTRAINT empresa_pkey;
       public            postgres    false    205            V           2606    18966    segmento segmento_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.segmento
    ADD CONSTRAINT segmento_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.segmento DROP CONSTRAINT segmento_pkey;
       public            postgres    false    211            �   <   x�3�t�,.)�L*�L�/J�2�tL)�ONL�L�2�t,ILNL�WHUK,J������� Ê      �   �   x��9�@  ��W��!�rc��f�%X\	߱��|L��bfx�v-�}b
 �哮�^�4�"E��3f�Z�彼#p�� e=������W���jy��p�h����=��r�w�mS@�w�zܤX�q�O�,Ҫ~d	��t)t�w�|���Oh�bB��8�      �   3   x�3�t,,�LI,M�K�2�tN�-�Wp/J�KI�2�I-J��/����� (�      �   �   x�%�A�0 ��W�P�Q�
DF�e��T�
H��_���e2��&�3=�7Nꢖ($�I�d��$��2�%	�1)��p�����OF[�����16u.�L�)	��M5R��P�E�}�7Չ����PE�SP��@�E߿/��lT��e�om�y�A������|��a�}f::2      �     x�E�AR�@E��)��)�	!ƨT,V60L+�`�m<�p����ս���k
;��k�c�I���=�븮M�-W)ʒ�"C�p�,��Cg����)�-�P�I���£�Bu-����4ع��W�&^��޳�����#��3��s|{I!Ԥ�A�N�2�4��>�,�ޘ�o��Z(���=H��Q��z�*ˇ������
93c^;x!��׊�����nSŋ��m�\�y~J7�;�C�,,��z�eD      �   2   x�3���K9����(3�ˈ�9?��ʢ��|.c��Ԣ�����b���� PU�     