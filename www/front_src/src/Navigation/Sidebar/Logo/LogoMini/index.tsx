import makeStyles from '@mui/styles/makeStyles';

import miniLogoLight from './logo-sipmon-mini.png';

interface Props {
  onClick?: () => void;
}
const useStyles = makeStyles((theme) => ({
  miniLogo: {
    height: theme.spacing(5),
    width: theme.spacing(5),
  },
}));

const MiniLogo = ({ onClick }: Props): JSX.Element => {
  const classes = useStyles();

  return (
    <div aria-hidden onClick={onClick}>
      <img alt="mini logo" className={classes.miniLogo} src={miniLogoLight} />
    </div>
  );
};

export default MiniLogo;
