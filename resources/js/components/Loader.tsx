import LoaderImg from '../../../public/images/Loader.svg';

export default function Loader() {
    return (
        <>
            {/* {loader && (
                <img src={LoaderImg} alt="Loading..." />
            )} */}

            <div className="loader-overlay">
                <img src={LoaderImg} alt="Loading..." />
            </div>
        </>
    );
}